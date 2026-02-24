<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function alert(type, msg, position = 'body') {
    let element = document.createElement('div');
    let icon = (type == 'success') ? 'bi-check-circle-fill' : 'bi-exclamation-triangle-fill';
    let colorClass = (type == 'success') ? 'alert-success' : 'alert-danger';
    element.innerHTML = `
      <div class="alert ${colorClass} alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
        <i class="bi ${icon}"></i>
        <strong>${msg}</strong>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;
    if (position == 'body') {
      document.body.append(element);
      element.classList.add('custom-alert');
    } else {
      document.getElementById(position).appendChild(element);
    }
    setTimeout(() => {
      let el = document.querySelector('.alert');
      if (el) el.closest('div').remove();
    }, 3000);
  }



  function setActive() {
    let navbar = document.getElementById('dashboard-menu');
    if (!navbar) return;
    // Exact match: extract current page filename, compare to link filename
    let currentPage = document.location.pathname.split('/').pop().split('.')[0];
    let a_tags = navbar.getElementsByTagName('a');
    for (let i = 0; i < a_tags.length; i++) {
      let linkFile = a_tags[i].href.split('/').pop().split('.')[0];
      if (linkFile !== '' && linkFile === currentPage) {
        a_tags[i].classList.add('active');
      }
    }
  }
  setActive();
</script>