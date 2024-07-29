
const managerContainer = document.querySelectorAll('.manager');
var section2Intro = document.getElementById('section2-intro');
var membersIntro = document.querySelectorAll('.members-intro');
 
var manager1 = document.querySelectorAll('.manager1');
var manager2 = document.querySelectorAll('.manager2');
var manager3 = document.querySelectorAll('.manager3');
var manager4 = document.querySelectorAll('.manager4');
var manager5 = document.querySelectorAll('.manager5');
var manager6 = document.querySelectorAll('.manager6');

var cebuBtn = document.getElementById('cebu-btn');
var makatiBtn = document.getElementById('makati-btn');
var boholBtn = document.getElementById('bohol-btn');
var negrosBtn = document.getElementById('negros-btn');
var pampangaBtn = document.getElementById('pampanga-btn');
const locButtons = [cebuBtn, makatiBtn, boholBtn, negrosBtn, pampangaBtn];

var cebu = document.getElementById('container-cebu');
var makati = document.getElementById('container-makati');
var bohol = document.getElementById('container-bohol');
var negros = document.getElementById('container-negros');
var pampanga = document.getElementById('container-pampanga');
const locations = [cebu, makati, bohol, negros, pampanga];

const tittle1 = document.querySelectorAll('.container-tittle1');
const tittle2 = document.querySelectorAll('.container-tittle2');
/* 1st buttons */
function handleLocationClick(button, locationName, branchTitle) {
    managerContainer.scrollTop = 0;
    locButtons.forEach((btn) => {
        const isActive = btn === button;
        btn.style.backgroundColor = isActive ? '#5af1ff' : 'transparent';
        btn.style.fontSize = isActive ? '20px' : '17px';
        btn.style.color = isActive ? 'black' : 'white';
    });

    locations.forEach((location) => {
        location.style.display = location === locationName ? 'block' : 'none';
    });

    section2Intro.style.display = 'none';

    tittle1.forEach((div) => {
        div.textContent = branchTitle + ' Branch Managers';
    });
    tittle2.forEach((div) => {
        div.textContent = 'Employees';
    });

    membersIntro.forEach((div) => {
        div.style.display = 'block';
    });

    const divsInsideMembersCebu = document.querySelectorAll('.members-cebu div');
    const divsInsideMembersMakati = document.querySelectorAll('.members-makati div');
    const divsInsideMembersBohol = document.querySelectorAll('.members-bohol div');
    const divsInsideMembersNegros = document.querySelectorAll('.members-negros div');
    const divsInsideMembersPampanga = document.querySelectorAll('.members-pampanga div');

    const allDivs = [
        ...divsInsideMembersCebu,
        ...divsInsideMembersMakati,
        ...divsInsideMembersBohol,
        ...divsInsideMembersNegros,
        ...divsInsideMembersPampanga,
    ];

    // Change the style display of each div to "block"
    allDivs.forEach((div) => {
        div.style.display = 'none';
    });
    
}

cebuBtn.onclick = () => handleLocationClick(cebuBtn, cebu, 'Cebu');
makatiBtn.onclick = () => handleLocationClick(makatiBtn, makati, 'Makati');
boholBtn.onclick = () => handleLocationClick(boholBtn, bohol, 'Bohol');
negrosBtn.onclick = () => handleLocationClick(negrosBtn, negros, 'Negros Oriental');
pampangaBtn.onclick = () => handleLocationClick(pampangaBtn, pampanga, 'Pampanga');

/* 2nd buttons */

const buttons = document.querySelectorAll('.myButton');
let activeEmployeeDiv = null; // Track the currently active employee div

buttons.forEach((button) => {
    const originalText = button.innerText;

    button.addEventListener('mouseover', () => {
        button.innerText = "See Employee's";
    });

    button.addEventListener('mouseout', () => {
        button.innerText = originalText;
    });

    button.addEventListener('click', (event) => {
        const employeeName = event.target.getAttribute('data-employee-name');
        const employeeDiv = document.querySelectorAll(`.${employeeName.replace(/\s+/g, '')}`);

        // Hide the previously active employee div
        if (activeEmployeeDiv) {
            activeEmployeeDiv.forEach((div) => {
                div.style.display = 'none';
            });
        }

        // Show the current employee div
        if (employeeDiv) {
            employeeDiv.forEach((div) => {
                div.style.display = 'block';
            });

            tittle2.forEach((div) => {
                div.textContent = `${employeeName} Employees`;
            });

            // Update the active employee div
            activeEmployeeDiv = employeeDiv;
        }
    });
});

 // founder part 
 const founderBtn = document.getElementById('founder-button');
 const founderTxt = document.getElementById('founder-info');
 let ft = 1;

 document.getElementById('founder-button').addEventListener('click', () => {
     if (ft==1) {
         founderTxt.style.transform = 'translateX(-50%)';
         founderBtn.textContent = 'Back';
         ft = 0;
     } 
     else {
         founderTxt.style.transform = 'translateX(0px)';
         founderBtn.textContent = 'Read More';
         ft = 1;
     }
 });

 // manager part
 const managerBtn = document.getElementById('manager-button');
 const managerTxt = document.getElementById('manager-info');
 let mt = 1;

 document.getElementById('manager-button').addEventListener('click', () => {
     if (mt==1) {
         managerTxt.style.transform = 'translateX(-50%)';
         managerBtn.textContent = 'Back';
         mt = 0;
     } 
     else {
         managerTxt.style.transform = 'translateX(0px)';
         managerBtn.textContent = 'Read More';
         mt = 1;
     }
 });

  // wife part
  const wifeBtn = document.getElementById('wife-button');
  const wifeTxt = document.getElementById('wife-info');
  let wt = 1;
 
  document.getElementById('wife-button').addEventListener('click', () => {
      if (wt==1) {
        wifeTxt.style.transform = 'translateX(-50%)';
          wifeBtn.textContent = 'Back';
          wt = 0;
      } 
      else {
        wifeTxt.style.transform = 'translateX(0px)';
          wifeBtn.textContent = 'Read More';
          wt = 1;
      }
  });

  