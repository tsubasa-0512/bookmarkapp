const form = document.querySelector(".typing-area");
const input = form.querySelector(".input-area");
const sendBtn = form.querySelector("button"); 

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200) {
        let data = xhr.response;
        if(data == "ログイン成功"){
          location.href = "users.php";
        }else {
          errorMSG.style.display = "block";
          errorMSG.textContent = data;
        }
      }
    }

  }
  let formData = new FormData(form);
  xhr.send(formData);
}