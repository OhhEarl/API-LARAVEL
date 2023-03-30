const textArea = document.querySelector('#user_text_input');
const para = document.querySelector('#posts_text');

const livePost = () =>{
  para.innerHTML = textArea.value;
}

const addPost = () =>{
  para.innerHTML = textArea.value;
}
