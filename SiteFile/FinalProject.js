// Scroll to sections
document.addEventListener("DOMContentLoaded", function() {
    // Get references to all buttons and sections
    const mathButton = document.getElementById("MathSection");
    const computerScienceButton = document.getElementById("ComputerScienceSection");
    const physicsButton = document.getElementById("PhysicsSection");
    const naturalScienceButton = document.getElementById("NaturalSienceSection");

    const mathSection = document.getElementById("Math");
    const computerScienceSection = document.getElementById("ComputerScience");
    const physicsSection = document.getElementById("Physics");
    const naturalScienceSection = document.getElementById("NaturalScience");

    // Add event listeners to buttons
    mathButton.addEventListener("click", () => {
    mathSection.scrollIntoView({ behavior: "smooth" });
    });

    computerScienceButton.addEventListener("click", () => {
    computerScienceSection.scrollIntoView({ behavior: "smooth" });
    });

    physicsButton.addEventListener("click", () => {
    physicsSection.scrollIntoView({ behavior: "smooth" });
    });

    naturalScienceButton.addEventListener("click", () => {
    naturalScienceSection.scrollIntoView({ behavior: "smooth" });
    });
});

// Toggel data and services cards
document.addEventListener("DOMContentLoaded", function() {
    // Math section
    const serviceCardsMath = document.querySelectorAll('#Math .ServicesCardStyle');
    const dataDivsMath = document.querySelectorAll('#Math .DataDivStyle');
    const choiceImgMath = document.querySelector('#Math .ChoiceImg');
    const yearButtonsMath = document.querySelectorAll('#Math .YearButtonStyle');

    hideAllMathContent();

    function hideAllMathContent() {
        serviceCardsMath.forEach(card => {
            card.style.display = 'none';
        });

        dataDivsMath.forEach(div => {
            div.style.display = 'none';
        });
    }

    function showImageMath() {
        choiceImgMath.style.display = 'flex';
    }

    function toggleMathContent(buttonId) {
        const year = buttonId.replace('ButtonMath', '');
        const serviceCard = document.getElementById(year + 'ServicesMath');
        const dataDiv = document.getElementById(year + 'MathData');

        if (serviceCard.style.display === 'none') {
            hideAllMathContent();
            choiceImgMath.style.display = 'none';
            serviceCard.style.display = 'flex';
            dataDiv.style.display = 'flex';
        } else {
            serviceCard.style.display = 'none';
            dataDiv.style.display = 'none';
            showImageMath();
        }
    }

    yearButtonsMath.forEach(button => {
        button.addEventListener('click', function() {
            const buttonId = this.id;
            toggleMathContent(buttonId);
        });
    });


    // ComputerScience section
    const serviceCardsComputerScience = document.querySelectorAll('#ComputerScience .ServicesCardStyle');
    const dataDivsComputerScience = document.querySelectorAll('#ComputerScience .DataDivStyle');
    const choiceImgComputerScience = document.querySelector('#ComputerScience .ChoiceImg');
    const yearButtonsComputerScience = document.querySelectorAll('#ComputerScience .YearButtonStyle');

    hideAllComputerScienceContent();

    function hideAllComputerScienceContent() {
        serviceCardsComputerScience.forEach(card => {
            card.style.display = 'none';
        });

        dataDivsComputerScience.forEach(div => {
            div.style.display = 'none';
        });
    }

    function showImageComputerScience() {
        choiceImgComputerScience.style.display = 'flex';
    }

    function toggleComputerScienceContent(buttonId) {
        const year = buttonId.replace('ButtonComputerScience', '');
        const serviceCard = document.getElementById(year + 'ServicesComputerScience');
        const dataDiv = document.getElementById(year + 'ComputerScienceData');

        if (serviceCard.style.display === 'none') {
            hideAllComputerScienceContent();
            choiceImgComputerScience.style.display = 'none';
            serviceCard.style.display = 'flex';
            dataDiv.style.display = 'flex';
        } else {
            serviceCard.style.display = 'none';
            dataDiv.style.display = 'none';
            showImageComputerScience();
        }
    }

    yearButtonsComputerScience.forEach(button => {
        button.addEventListener('click', function() {
            const buttonId = this.id;
            toggleComputerScienceContent(buttonId);
        });
    });


    // Physics section
    const serviceCardsPhysics = document.querySelectorAll('#Physics .ServicesCardStyle');
    const dataDivsPhysics = document.querySelectorAll('#Physics .DataDivStyle');
    const choiceImgPhysics = document.querySelector('#Physics .ChoiceImg');
    const yearButtonsPhysics = document.querySelectorAll('#Physics .YearButtonStyle');

    hideAllPhysicsContent();

    function hideAllPhysicsContent() {
        serviceCardsPhysics.forEach(card => {
            card.style.display = 'none';
        });

        dataDivsPhysics.forEach(div => {
            div.style.display = 'none';
        });
    }

    function showImagePhysics() {
        choiceImgPhysics.style.display = 'flex';
    }

    function togglePhysicsContent(buttonId) {
        const year = buttonId.replace('ButtonPhysics', '');
        const serviceCard = document.getElementById(year + 'ServicesPhysics');
        const dataDiv = document.getElementById(year + 'PhysicsData');

        if (serviceCard.style.display === 'none') {
            hideAllPhysicsContent();
            choiceImgPhysics.style.display = 'none';
            serviceCard.style.display = 'flex';
            dataDiv.style.display = 'flex';
        } else {
            serviceCard.style.display = 'none';
            dataDiv.style.display = 'none';
            showImagePhysics();
        }
    }

    yearButtonsPhysics.forEach(button => {
        button.addEventListener('click', function() {
            const buttonId = this.id;
            togglePhysicsContent(buttonId);
        });
    });

    // NaturalScience section
    const serviceCardsNaturalScience = document.querySelectorAll('#NaturalScience .ServicesCardStyle');
    const dataDivsNaturalScience = document.querySelectorAll('#NaturalScience .DataDivStyle');
    const choiceImgNaturalScience = document.querySelector('#NaturalScience .ChoiceImg');
    const yearButtonsNaturalScience = document.querySelectorAll('#NaturalScience .YearButtonStyle');

    hideAllNaturalScienceContent();

    function hideAllNaturalScienceContent() {
        serviceCardsNaturalScience.forEach(card => {
            card.style.display = 'none';
        });

        dataDivsNaturalScience.forEach(div => {
            div.style.display = 'none';
        });
    }

    function showImageNaturalScience() {
        choiceImgNaturalScience.style.display = 'flex';
    }

    function toggleNaturalScienceContent(buttonId) {
        const year = buttonId.replace('ButtonNaturalScience', '');
        const serviceCard = document.getElementById(year + 'ServicesNaturalScience');
        const dataDiv = document.getElementById(year + 'NaturalScienceData');

        if (serviceCard.style.display === 'none') {
            hideAllNaturalScienceContent();
            choiceImgNaturalScience.style.display = 'none';
            serviceCard.style.display = 'flex';
            dataDiv.style.display = 'flex';
        } else {
            serviceCard.style.display = 'none';
            dataDiv.style.display = 'none';
            showImageNaturalScience();
        }
    }

    yearButtonsNaturalScience.forEach(button => {
        button.addEventListener('click', function() {
            const buttonId = this.id;
            toggleNaturalScienceContent(buttonId);
        });
    });
});

// Display Student Card
document.addEventListener("DOMContentLoaded", function () {
    const tableRows = document.querySelectorAll('.TablesStyle tbody tr');
    const studentCardsContainer = document.getElementById('StudentCardsContainer');
    let currentRow = null;

    tableRows.forEach((row, index) => {
        row.addEventListener('click', function (event) {
            const rect = row.getBoundingClientRect();
            const mouseX = rect.left + window.scrollX;
            const mouseY = rect.top + window.scrollY + row.offsetHeight; // Position card below the row
            const rowData = {
                id: row.cells[1].innerText, // Adjusted index for id
                fullName: row.cells[2].innerText,
                gSuit: row.cells[3].innerText,
                year: row.cells[4].innerText,
                speciality: row.cells[5].innerText
            };

            if (currentRow === row) {
                hideStudentCard();
                currentRow = null;
            } else {
                displayStudentCard(rowData, mouseX, mouseY);
                currentRow = row;
            }
        });
    });

    function displayStudentCard(data, mouseX, mouseY) {
        const studentCard = document.getElementById('StudentCard');
        studentCard.innerHTML = `
            <div class="StudentCardStyleImg">
                <img src="https://i.pinimg.com/564x/92/32/4d/92324d440218568571e5d464edea7979.jpg" alt="">
            </div>
            <div class="StudentCardStyleInfo">
                <h3>${data.fullName}</h3>
                <p><span>Id: </span>${data.id}</p>
                <p><span>G-suite: </span>${data.gSuit}</p>
                <p><span>Level: </span>${data.year}</p>
                <p><span>Speciality: </span>${data.speciality}</p>
            </div>
        `;
        const studentCardsContainer = document.getElementById('StudentCardsContainer');
        studentCardsContainer.style.display = 'block';
        studentCardsContainer.style.top = mouseY + 'px';
        studentCardsContainer.style.left = mouseX + 'px';
    }
    

    function hideStudentCard() {
        studentCardsContainer.style.display = 'none'; // Hide the container
    }
});

// Search in table
document.addEventListener('DOMContentLoaded', function() {
    var searchBoxes = document.querySelectorAll('.SearchBoxTableStyle');

    searchBoxes.forEach(function(searchBox) {
        searchBox.addEventListener('input', function() {
            var searchText = this.value.trim().toLowerCase();
            var table = this.closest('table');
            var rows = table.querySelectorAll('tbody tr');

            rows.forEach(function(row) {
                var cells = row.querySelectorAll('td');
                cells.forEach(function(cell) {
                    var cellText = cell.textContent.trim().toLowerCase();
                    if (searchText && cellText.includes(searchText)) {
                        cell.innerHTML = cellText.replace(new RegExp(searchText, 'gi'), '<span class="Highlight">$&</span>');
                    } else {
                        cell.innerHTML = cellText;
                    }
                });
            });
        });
    });
});

// Quick Nav Bar
document.addEventListener('DOMContentLoaded', function() {
    let isScrolling;
            const quickNav = document.getElementById('QuickNav');
            
            window.addEventListener('scroll', () => {
                clearTimeout(isScrolling);
                quickNav.style.bottom = '0';
                
                isScrolling = setTimeout(() => {
                    quickNav.style.bottom = '-100px';
                }, 5000);
            });
});

// PopUp Message
document.addEventListener('DOMContentLoaded', function() {

    showPopUp()
    function showPopUp (){
        const URLparamater = new URLSearchParams(window.location.search);
        const message = URLparamater.get("message");
        
        if(!message) return;
        
        const PopUpDiv = document.querySelector('.PopUpDivStyle'); 
        const CloseButton = document.querySelector('.CloseButtonStyle'); 
        const Notificationmesssage = document.querySelector('.NotificationContentStyle'); 

        Notificationmesssage.innerHTML = message ; 
        PopUpDiv.style.top= '0rem'; 
        PopUpDiv.style.transitin= '.5s all' 
        
        CloseButton.addEventListener('click', function() {
            PopUpDiv.style.top = '-15rem'; 
        });
        
    }
});

