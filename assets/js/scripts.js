/** Obter URL e Parâmetros */

const urlParametros = new URLSearchParams(window.location.search);
const searchParams = new URLSearchParams(location.search);

const nomeParametro = urlParametros.get('status');

const openModal = document.querySelector("#modal");
const closeModal = document.querySelector("#btn-modal-close");
const divFade = document.querySelector("#fade");

const msgStatus = document.querySelector("#status_msg");
const titleModal = document.querySelector("#modal-title");
const modalHeader = document.getElementById("#modal-header");

//-----------------------------CHAMADA DAS FUNÇÕES--------------------------------------------------

if(nomeParametro == "sucesso"){
    ModalSucesso();
}

if(nomeParametro == "nome_vazio"){
    ModalNomeVazio();
}

if(nomeParametro == "email_vazio"){
    ModalEmailVazio();
}

if(nomeParametro == "assunto_vazio"){
    ModalAssuntoVazio();
}

if(nomeParametro == "msg_vazio"){
    ModalMensagemVazio();
}

closeModal.addEventListener('click',fecharModal);


//--------------------------------------FUNÇÕES-----------------------------------------------------------
function ModalSucesso(){
    divFade.classList.toggle('hide');
    openModal.classList.toggle('hide');
    titleModal.innerHTML = '<h4 style="color:#32CD32;">Mensagem enviada</h4>';
    msgStatus.innerHTML = '<p>Obrigado pela sua mensagem. Aguarde que em breve entrarei em contato</p>';

}

function ModalNomeVazio(){
    divFade.classList.toggle('hide');
    openModal.classList.toggle('hide');
    titleModal.innerHTML = '<h4 style="color:red;">Erro</h4>';
    msgStatus.innerHTML = '<p>Preencha o campo <b>Nome</b> no formulário</p>';

}

function ModalEmailVazio(){
    divFade.classList.toggle('hide');
    openModal.classList.toggle('hide');
    titleModal.innerHTML = '<h4 style="color:red;">Erro</h4>';
    msgStatus.innerHTML = '<p>Preencha o campo <b>E-mail</b> no formulário</p>';
}

function ModalAssuntoVazio(){
    divFade.classList.toggle('hide');
    openModal.classList.toggle('hide');
    titleModal.innerHTML = '<h4 style="color:red;">Erro</h4>';
    msgStatus.innerHTML = '<p>Preencha o campo <b>Assunto</b> no formulário</p>';
}

function ModalMensagemVazio(){
    divFade.classList.toggle('hide');
    openModal.classList.toggle('hide');
    titleModal.innerHTML = '<h4 style="color:red;">Erro</h4>';
    msgStatus.innerHTML = '<p>Preencha o campo <b>Mensagem</b> no formulário</p>';
}

function fecharModal(){
    divFade.classList.toggle('hide');
    openModal.classList.toggle('hide');
}


