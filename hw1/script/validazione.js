const formStatus = {'upload': true};
document.querySelector('#nome').addEventListener('blur', checkName);
document.querySelector('#cognome').addEventListener('blur', checkSurname);
document.querySelector('#email').addEventListener('blur', checkEmail);
document.querySelector('#password').addEventListener('blur', checkPassword);
document.querySelector('#conferma_password').addEventListener('blur', checkConfirmPassword);
const nome_er=document.querySelector('#nome_er');
const cognome_er=document.querySelector('#cognome_er');
const email_er=document.querySelector('#email_er');
const password_er=document.querySelector('#password_er');
const conferma_password_er=document.querySelector('#conferma_password_er');
function checkName(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.name] = input.value.length > 0) {
        input.parentNode.parentNode.classList.remove('errorj');
        nome_er.textContent='';
    }
    
    else {
        input.parentNode.parentNode.classList.add('errorj');
        console.log("errore");
        nome_er.textContent='Inserire nome';
    }}
    

    function checkSurname(event) {
        const input = event.currentTarget;
        
        if (formStatus[input.cognome] = input.value.length > 0) {
            input.parentNode.parentNode.classList.remove('errorj');
            cognome_er.textContent='';
        }
        else {
            input.parentNode.parentNode.classList.add('errorj');
            cognome_er.textContent='Inserire cognome';
        }}
        



  function checkEmail(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.email] = input.value.length > 0) {
        input.parentNode.parentNode.classList.remove('errorj');
        email_er.textContent='';
    }
    
    else {
        input.parentNode.parentNode.classList.add('errorj');
        email_er.textContent='Inserire email';
    }}
    
    function checkPassword(event) {
        const input = event.currentTarget;
        
        if (formStatus[input.password] = input.value.length > 0) {
            input.parentNode.parentNode.classList.remove('errorj');
            password_er.textContent='';
        }
        
        else {
            input.parentNode.parentNode.classList.add('errorj');
            password_er.textContent='Inserire password';
        }}

        function checkConfirmPassword(event) {
            const input = event.currentTarget;
            
            if (formStatus[input.conferma_password] = input.value.length > 0) {
                input.parentNode.parentNode.classList.remove('errorj');
                conferma_password_er.textContent='';
            }
            
            else {
                input.parentNode.parentNode.classList.add('errorj');
                conferma_password_er.textContent='Inserire password';
            }}