function showToast(message, type = "success") {
    const toastEl = document.getElementById('toast');
    toastEl.querySelector('.toast-body').textContent = message;
    toastEl.className = `toast align-items-center text-white bg-${type}`;
    const toast = new bootstrap.Toast(toastEl);
    toast.show();
}
