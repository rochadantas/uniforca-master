let email = document.querySelector("#email");
let senha = document.querySelector("#senha");
const form = document.querySelector("#form");
const url = window.location.href+"/src/libary/getLogin.php";
  console.log(url);
form.addEventListener("submit", async event => {
  event.preventDefault(); 
  
  const formData = new FormData(form);

  const data = await fetch(url,{
    method :'POST',
    mode : 'cors',
    body : formData
    
  })

  console.log(formData)
  
  
});