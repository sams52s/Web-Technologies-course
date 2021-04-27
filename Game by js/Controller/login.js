const sign_in_btn = document.querySelector('#sign-in-btn'); //grabing and storing creating btn var 
const sign_up_btn = document.querySelector('#sign-up-btn'); //grabing and storing creating btn var 
const container = document.querySelector('.container');
/** this fun is for clicking btns. when we are clicking sign up btn a mode class is been created and after sign in btn it will be removed.
 * this is nothing just to creat that animation and hovering two parts.
 */
sign_up_btn.addEventListener('click', () => {

    container.classList.add('sign-up-mode');
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove('sign-up-mode');
});
//i am realy new in this js part. 
//this full login part was created by help of "https://www.youtube.com/watch?v=I5_T547tHf0&list=PLxp4CMStErv4aYIQumXNKiHYfr-m-RikW&index=21" this youtube video.