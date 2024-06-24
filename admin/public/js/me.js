const getBtnPendingAll = document.querySelectorAll('.btn-pending');
const getTextSuccess = document.querySelector('.success');
const getMessageSuccess = document.querySelector('.alert-success.fade');
const getTextError = document.querySelector('.error');
const getMessageError = document.querySelector('.alert-danger.fade');

if (getTextSuccess.innerText.length > 0) {
    getMessageSuccess.classList.add('show');
}

if (getTextError.innerText.length > 0) {
    getMessageError.classList.add('show');
}

getBtnPendingAll.forEach(itemBtn => {
    itemBtn.onclick = function () {
        this.className = 'btn btn-success disabled';
        this.innerText = 'Đã đăng';
    }
});
