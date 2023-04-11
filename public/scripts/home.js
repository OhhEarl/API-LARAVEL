let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
const textArea = document.querySelector('#user_text_input');
const postHere = document.querySelector('#postHere');

const createPost = () =>{
  postHere.innerHTML = 'Loading Content..';
  fetch("/insertPost/"+textArea.value,{
    method: "GET",
    header: {
      "Content-Type": "text/html",
      "X-Requested-With": "XMLHttpRequest",
      "X-CSRF-TOKEN": token
    }
  }).then(res => res.text())
  .then(response => {
    postHere.innerHTML = response
    textArea.value = '';
  })
  .catch(err => {
    console.log(err);
  });
}

// const textArea = document.querySelector('#user_text_input');
// const postText = document.querySelector('#post_text');
// const postHere = document.querySelector('#postHere');

// const liveText = () => {
//     postText.innerHTML = textArea.value;
// }

// const createPost = () => {
//   fetch("/insertPost/"+textArea.value,{
//     method: "GET",
//     headers: {
//       "Content-Type": "text/html",
//       "X-Requested-With": "XMLHttpRequest",
//       "X-CSRF-TOKEN": token
//     },
//   })
//   .then(res => res.text())
//   .then(response => {
//     postHere.innerHTML = response;
//   })
//   .catch(err => {
//     console.log(err)
//   });
// }

// const clearPost = () =>{
//   postText.innerHTML = '';
//   textArea.value = '';
// }
