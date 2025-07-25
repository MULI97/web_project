function validateForm(event) {
  const name = document.getElementById("fullname").value.trim();
  const email = document.getElementById("email").value.trim();
  const date = document.getElementById("birthdate").value;

  // Name Validation
  const namePattern = /^[A-Za-zÀ-ÿ\s'-]+$/;
  if (!namePattern.test(name)) {
    alert("Please enter a valid name. Only letters, spaces, hyphens, and apostrophes are allowed.");
    event.preventDefault();
    return false;
  }

  // Email Validation
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    event.preventDefault();
    return false;
  }

  // Date Range Validation
  const selectedDate = new Date(date);
  const minDate = new Date("1960-01-01");
  const maxDate = new Date();
  if (selectedDate < minDate || selectedDate > maxDate) {
    alert("Please enter a date between 1960 and today.");
    event.preventDefault();
    return false;
  }

  return true;
}

// Attach listener after DOM loads
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("myForm");
  if (form) {
    form.addEventListener("submit", validateForm);
  }
});
