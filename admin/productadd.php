<?php
include "header.php";
include 'config.php';
include 'data.php';

$productSaved = FALSE;

if (isset($_POST['submit'])) {
    /*
     * Read posted values.
     */
    $productName = isset($_POST['productName']) ? $_POST['productName'] : '';
    $productBrand = isset($_POST['productBrand']) ? $_POST['productBrand'] : '';
    $productDistributor = isset($_POST['productDistributor']) ? $_POST['productDistributor'] : '';
    $productCPU = isset($_POST['productCPU']) ? $_POST['productCPU'] : '';
    $productRam = isset($_POST['productRam']) ? $_POST['productRam'] : '';
    $productHardDisk = isset($_POST['']) ? $_POST[''] : '';
    $productVGA = isset($_POST['productVGA']) ? $_POST['productVGA'] : '';
    $productScreen = isset($_POST['productScreen']) ? $_POST['productScreen'] : '';
    $productBattery = isset($_POST['productBattery']) ? $_POST['productBattery'] : '';
    $productWeight = isset($_POST['productWeight']) ? $_POST['productWeight'] : '';
    $productColor = isset($_POST['productColor']) ? $_POST['productColor'] : '';
    $productFeature = isset($_POST['productFeature']) ? $_POST['productFeature'] : '';
    $productOS = isset($_POST['productOS']) ? $_POST['productOS'] : '';
    $productImage = isset($_POST['productImage']) ? $_POST['productImage'] : '';
    $productQuantity = isset($_POST['quantityInStock']) ? $_POST['quantityInStock'] : 0;
    $productPrice = isset($_POST['productPrice']) ? $_POST['productPrice'] : 0;
    $productPriceOnSale = isset($_POST['productPriceOnSale']) ? $_POST['productPriceOnSale'] : 0;
    

    /*
     * Validate posted values.
     */
    if (empty($productName)) {
        $errors[] = 'Please provide a product name.';
    }

    if ($productQuantity == 0) {
        $errors[] = 'Please provide the quantity.';
    }

    if (empty($productDescription)) {
        $errors[] = 'Please provide a description.';
    }

    /*
     * Create "uploads" directory if it doesn't exist.
     */
    if (!is_dir(UPLOAD_DIR)) {
        mkdir(UPLOAD_DIR, 0777, true);
    }

    /*
     * List of file names to be filled in by the upload script 
     * below and to be saved in the db table "products_images" afterwards.
     */
    $filenamesToSave = [];

    $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);

    /*
     * Upload files.
     */
    if (!empty($_FILES)) {
        if (isset($_FILES['file']['error'])) {
            foreach ($_FILES['file']['error'] as $uploadedFileKey => $uploadedFileError) {
                if ($uploadedFileError === UPLOAD_ERR_NO_FILE) {
                    $errors[] = 'You did not provide any files.';
                } elseif ($uploadedFileError === UPLOAD_ERR_OK) {
                    $uploadedFileName = basename($_FILES['file']['name'][$uploadedFileKey]);

                    if ($_FILES['file']['size'][$uploadedFileKey] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['file']['type'][$uploadedFileKey];
                        $uploadedFileTempName = $_FILES['file']['tmp_name'][$uploadedFileKey];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $filenamesToSave[] = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
            }
        }
    }

    /*
     * Save product and images.
     */
    if (!isset($errors)) {
        /*
         * The SQL statement to be prepared. Notice the so-called markers, 
         * e.g. the "?" signs. They will be replaced later with the 
         * corresponding values when using mysqli_stmt::bind_param.
         * 
         * @link http://php.net/manual/en/mysqli.prepare.php
         */
        $insert = 'INSERT INTO products (
                    productName, productBrand, productDistributor, productCPU, productRam, 
                    productHardDisk, productVGA, productScreen, productBattery, productWeight, 
                    productColor, productFeature, productOS, productImage, quantityInStock,
                    productPrice
                ) VALUES (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                )';

        /*
         * Prepare the SQL statement for execution - ONLY ONCE.
         * 
         * @link http://php.net/manual/en/mysqli.prepare.php
         */
        $statement = $connection->prepare($insert);

        /*
         * Bind variables for the parameter markers (?) in the 
         * SQL statement that was passed to prepare(). The first 
         * argument of bind_param() is a string that contains one 
         * or more characters which specify the types for the 
         * corresponding bind variables.
         * 
         * @link http://php.net/manual/en/mysqli-stmt.bind-param.php
         */
        $statement->bind_param('ssssssssssssssii', $productName, $productBrand, $productDistributor, $productCPU, $productRam, 
                                $productHardDisk, $productVGA, $productScreen, $productBattery, $productWeight, 
                                $productColor, $productFeature, $productOS, $filenamesToSave, $productQuantity,
                                $productPrice);

        /*
         * Execute the prepared SQL statement.
         * When executed any parameter markers which exist will 
         * automatically be replaced with the appropriate data.
         * 
         * @link http://php.net/manual/en/mysqli-stmt.execute.php
         */
        $statement->execute();
        echo "Add product successfully";

        // Read the id of the inserted product.
        $lastInsertId = $connection->insert_id;

        /*
         * Close the prepared statement. It also deallocates the statement handle.
         * If the statement has pending or unread results, it cancels them 
         * so that the next query can be executed.
         * 
         * @link http://php.net/manual/en/mysqli-stmt.close.php
         */
        $statement->close();
        /*
         * Close the previously opened database connection.
         * 
         * @link http://php.net/manual/en/mysqli.close.php
         */
        $connection->close();

        $productSaved = TRUE;

        /*
         * Reset the posted values, so that the default ones are now showed in the form.
         * See the "value" attribute of each html input.
         */
        $productName= $productBrand= $productDistributor= $productCPU= $productRam= 
                                $productHardDisk= $productVGA= $productScreen= $productBattery= $productWeight= 
                                $productColor= $productFeature= $productOS= $filenamesToSave= $productQuantity=
                                $productPrice=NULL;
    }
}
?>

        <div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>ADD PRODUCT</h1>
                <form action=""method="POST" enctype="multipart/form-data">
                <div class="col" style="width: 500px; float:left; height:100px; margin:20px">
                    <label for="">Product Name <span style="color:red;" >*</span></label>
                    <textarea name="productName" id="" cols="30" rows="10" value="<?php echo isset($productName) ? $productName : ''; ?>"></textarea>
                    <label for="">Product Brand <span style="color:red;" >*</span></label>
                    <textarea name="productBrand"id=""cols="30"rows="10" value="<?php echo isset($productBrand) ? $productBrand : ''; ?>"></textarea>
                    <label for="">Product Distributor <span style="color:red;" >*</span></label>
                    <textarea name="productDistributor"id=""cols="30"rows="10" value="<?php echo isset($productDistributor) ? $productDistributor : ''; ?>"></textarea>
                    <label for="productCPU">Product CPU <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10"></textarea value="<?php echo isset($productCPU) ? $productCPU : ''; ?>">
                    <label for="productRam">Product Ram <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10"></textarea value="<?php echo isset($productRam) ? $productRam : ''; ?>">
                    <label for="productHardDisk">Product Hard Disk <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10"value="<?php echo isset($productHardDisk) ? $productHardDisk : ''; ?>"></textarea>
                    <label for="productVGA">Product VGA <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10"value="<?php echo isset($productVGA) ? $productVGA : ''; ?>"></textarea>
                    <label for="productScreen">Product Screen <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10" value="<?php echo isset($productScreen) ? $productScreen : ''; ?>"></textarea>
                </div>
                <div class="col" style="width: 500px; float:left; height:100px; margin:20px">
                    <label for="productBattery">Product Battery <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10" value="<?php echo isset($productBattery) ? $productBattery : ''; ?>"></textarea>
                    <label for="productWeight">Product Weight <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10" value="<?php echo isset($productWeight) ? $productWeight : ''; ?>"></textarea>
                    <label for="productColor">Product Color <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10" value="<?php echo isset($productColor) ? $productColor : ''; ?>"></textarea>
                    <label for="productFeature">Product Feature <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10" value="<?php echo isset($productFeature) ? $productFeature : ''; ?>"></textarea>
                    <label for="productOS">Product OS <span style="color:red;" >*</span></label>
                    <textarea name=""id=""cols="30"rows="10" value="<?php echo isset($productOS) ? $productOS : ''; ?>"></textarea>
                    <table>
                        <tr>
                            <td>
                                <label for="quantityInStock">Quantity <span style="color:red;" >*</span></label>
                                <input type="number" value="<?php echo isset($productQuantity) ? $productQuantity : '0'; ?>">
                                <label for="productPrice">Product Price <span style="color:red;" >*</span></label>
                                <input type="number" value="<?php echo isset($productPrice) ? $productPrice : '0'; ?>">
                            </td>
                            <td>
                                <label for="productImage">Product Picture <span style="color:red;" >*</span></label>
                                <input multiple type="file" >
                                <button type="submit" id="submit" name="submit" class="button">Thêm</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="productPriceOnSale">Product Price On Sale <span style="color:red;" >*</span></label>
                                <input type="number" >
                            </td>
                        </tr>
                    </table>
                </div>
                </form>
                <?php
            if ($productSaved) {
                ?>
                <a href="getProduct.php?id=<?php echo $lastInsertId; ?>" class="link-to-product-details">
                    Click me to see the saved product details in <b>getProduct.php</b> (product id: <b><?php echo $lastInsertId; ?></b>)
                </a>
                <?php
            }
            ?>
            </div>
        </div>
    </section>
</body>
</html>