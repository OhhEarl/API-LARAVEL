const textArea = document.querySelector('#user_text_input');
const postText = document.querySelector('#post_text');

const liveText = () => {
    postText.innerHTML = textArea.value;
}

const createPost = () => {
  postText.innerHTML = textArea.value;
}

const clearPost = () =>{
  postText.innerHTML = '';
  textArea.value = '';
}
