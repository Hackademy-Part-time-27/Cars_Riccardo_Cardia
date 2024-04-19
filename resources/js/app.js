import './bootstrap';

const BtnDeletes=document.querySelectorAll('[data-bs-toggle="modal"]');


for(let Btn of BtnDeletes){

    Btn.addEventListener('click', e => {

        const c= e.target.getAttribute('data-action');

        document.getElementById('formdelete').setAttribute('action', c);
    })

}