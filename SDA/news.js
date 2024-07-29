
    
    var intro = document.getElementById('section1-intro');

        var div1 = document.getElementById('news');
        var div2 = document.getElementById('events');
        var div3 = document.getElementById('achievements');



        var button1 = document.getElementById('button1');
        var button2 = document.getElementById('button2');
        var button3 = document.getElementById('button3');

        button1.onclick = function() {
            intro.style.display = 'none';
            div1.style.display = 'flex';
            button1.style.backgroundColor = 'transparent';
            button2.style.backgroundColor = '#42d6ca';
            button3.style.backgroundColor = '#42d6ca';
            button1.style.color = 'white';
            button2.style.color = 'black';
            button3.style.color = 'black';
            button1.style.fontSize = '1.5vw';
            button2.style.fontSize = '1.2vw';
            button3.style.fontSize = '1.2vw';
            div2.style.display = 'none';
            div3.style.display = 'none';

        };

        button2.onclick = function() {
            intro.style.display = 'none';
            div1.style.display = 'none';
            div2.style.display = 'flex';
            button1.style.backgroundColor = '#42d6ca';
            button2.style.backgroundColor = 'transparent';
            button3.style.backgroundColor = '#42d6ca';
            button1.style.color = 'black';
            button2.style.color = 'white';
            button3.style.color = 'black';
            button1.style.fontSize = '1.2vw';
            button2.style.fontSize = '1.5vw';
            button3.style.fontSize = '1.2vw';
            div3.style.display = 'none';

            

        };

        button3.onclick = function() {
            intro.style.display = 'none';
            div1.style.display = 'none';
            div2.style.display = 'none';
            div3.style.display = 'flex';
            button1.style.backgroundColor = '#42d6ca';
            button2.style.backgroundColor = '#42d6ca';
            button3.style.backgroundColor = 'transparent';
            button1.style.color = 'black';
            button2.style.color = 'black';
            button3.style.color = 'white';
            button1.style.fontSize = '1.2vw';
            button2.style.fontSize = '1.2vw';
            button3.style.fontSize = '1.3vw';
        };

        const newsDivContainer = document.querySelector('#news');
        const newsCount = document.getElementById('news-num');

        const eventDivContainer = document.querySelector('#events');
        const eventCount = document.getElementById('events-num');

        const achievementsDivContainer = document.querySelector('#achievements');
        const achievementsCount = document.getElementById('achievements-num');

        window.onload = function() {
            const newsposts = newsDivContainer.querySelectorAll('iframe');
            newsCount.textContent = `${newsposts.length}`;

            const eventsposts = eventDivContainer.querySelectorAll('iframe');
            eventCount.textContent = `${eventsposts.length}`;

            const achievementsposts = achievementsDivContainer.querySelectorAll('iframe');
            achievementsCount.textContent = `${achievementsposts.length}`;

        };

