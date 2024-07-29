document.getElementById('locate').addEventListener('change', function () {
    const selectedValue = this.value;
    const mapText = document.getElementById('map-text');
    const modelSelect1 = document.getElementById('cebu');
    const modelSelect2 = document.getElementById('makati');
    const modelSelect3 = document.getElementById('bohol');
    const modelSelect4 = document.getElementById('negros');
    const modelSelect5 = document.getElementById('pampanga');

    if (selectedValue === 'Cebu') {
        mapText.style.display = 'none';
        modelSelect1.style.display = 'block';
        modelSelect2.style.display = 'none';
        modelSelect3.style.display = 'none';
        modelSelect4.style.display = 'none';
        modelSelect5.style.display = 'none';
    } 

    else if (selectedValue === 'Makati') {
        mapText.style.display = 'none';
        modelSelect1.style.display = 'none';
        modelSelect2.style.display = 'block';
        modelSelect3.style.display = 'none';
        modelSelect4.style.display = 'none';
        modelSelect5.style.display = 'none';
    } 

    else if (selectedValue === 'Bohol') {
        mapText.style.display = 'none';
        modelSelect1.style.display = 'none';
        modelSelect2.style.display = 'none';
        modelSelect3.style.display = 'block';
        modelSelect4.style.display = 'none';
        modelSelect5.style.display = 'none';
    } 

    else if (selectedValue === 'Negros Oriental') {
        mapText.style.display = 'none';
        modelSelect1.style.display = 'none';
        modelSelect2.style.display = 'none';
        modelSelect3.style.display = 'none';
        modelSelect4.style.display = 'block';
        modelSelect5.style.display = 'none';
    } 

    else if (selectedValue === 'Pampanga') {
        mapText.style.display = 'none';
        modelSelect1.style.display = 'none';
        modelSelect2.style.display = 'none';
        modelSelect3.style.display = 'none';
        modelSelect4.style.display = 'none';
        modelSelect5.style.display = 'block';
    } 
    
    else {
        mapText.style.display = 'block';
        modelSelect1.style.display = 'none';
        modelSelect2.style.display = 'none';
        modelSelect3.style.display = 'none';
        modelSelect4.style.display = 'none';
        modelSelect5.style.display = 'none';
    }

  });

  (function () {
    "use strict";
    
    const forms = document.querySelectorAll(".needs-validation");
    const result = document.getElementById("result");

    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener(
        "submit",
        function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
  
            form.querySelectorAll(":invalid")[0].focus();
          } else {
  
            const formData = new FormData(form);
            event.preventDefault();
            event.stopPropagation();
            const object = {};
            formData.forEach((value, key) => {
              object[key] = value;
            });
            const json = JSON.stringify(object);
            result.innerHTML = "Sending Inquiry Please wait...";
  
            fetch("https://api.web3forms.com/submit", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
                Accept: "application/json"
              },
              body: json
            })
              .then(async (response) => {
                let json = await response.json();
                if (response.status == 200) {
                  result.innerHTML = json.message;
                  result.classList.remove("text-gray-500");
                  result.classList.add("text-green-500");
                } else {
                  console.log(response);
                  result.innerHTML = json.message;
                  result.classList.remove("text-gray-500");
                  result.classList.add("text-red-500");
                }
              })
              .catch((error) => {
                console.log(error);
                result.innerHTML = "Unfortunately, the email failed to send. Please try again.";
              })
              .then(function () {
                form.reset();
                form.classList.remove("was-validated");
                setTimeout(() => {
                  result.style.display = "none";
                }, 5000);
              });
          }
          form.classList.add("was-validated");
        },
        false
      );
    });
  })();

document.getElementById('inquiry').addEventListener('change', function () {
    const selectedValue = this.value;
    const modelSelect = document.getElementById('job');

    if (selectedValue === 'Career') {
      modelSelect.required = true;
      modelSelect.disabled = false;
    } else {
      modelSelect.required = false;
      modelSelect.disabled = true;
    }
  });