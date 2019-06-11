const delModal = document.getElementById('deleteModal')
    .children[0].children[0].lastElementChild.lastElementChild;

function setDeleteModal(id){
    delModal.setAttribute('action', delModal.getAttribute('action').replace(/\/(\d+)$/, '/' + id));
}