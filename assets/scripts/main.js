const counters = document.querySelectorAll(".counter");

window.addEventListener("scroll", styleNav);

function styleNav()
{
    document.querySelector("header").classList.toggle("nav-scroll", window.scrollY > 0);
    
    // Animation Counter
    if(window.scrollY > 0)
    {
        counters.forEach(counter => {
            let target = +counter.dataset.target;
            let step = 100;
            let dec = parseInt((999 - target) / step);
            
            function updateCount()
            {
                const curr = +counter.innerText;
                if(curr > target)
                {
                    counter.innerText = curr - dec;
                    setTimeout(updateCount, 5);
                }
                else counter.innerText = target;
            }
            setTimeout(updateCount,900);
        })
        
    }
}
