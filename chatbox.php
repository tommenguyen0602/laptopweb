<?php
echo'
<button class="nut-mo-chatbox" onclick="moForm()">
    <i class="fa-brands fa-facebook-messenger"></i>
    </button>
 <div class="Chatbox" id="myForm">
   <form action="" class="form-container">
     <h1>SE13</h1>
    <label for="msg"><b>Trò chuyện với chúng tôi</b></label>
     <textarea placeholder="Bạn hãy nhập lời nhắn.." name="msg" required></textarea>
    <button type="submit" class="btn">Gửi</button>
     <button type="button" class="btn nut-dong-chatbox" onclick="dongForm()">Đóng</button>
   </form>
   '
;?>