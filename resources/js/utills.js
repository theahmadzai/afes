const header = document.getElementById('header');
const topbar = document.getElementById('topbar');
const navbar = document.getElementById('navbar');
const logo = document.getElementById('logo');
const logoSm = document.getElementById('logo-sm');
const topbarHeight = topbar.clientHeight;
const topbarOffsetHeight = topbar.offsetHeight;
const headerOffset = header.offsetHeight;

let progress = false;

window.addEventListener('scroll', function (e) {
    if (progress) return;
    progress = true;

    window.setTimeout(function () {
        this.console.log(this.pageYOffset, topbar.offsetHeight, topbar.scrollHeight, this.scrollTop, this.clientHeight);
        if (this.pageYOffset >= topbarOffsetHeight && this.scolHeight - this.scrollTop - this.clientHeight < topbarOffsetHeight) {
            topbar.style.height = 0;
            logoSm.style.display = 'block';
            logo.style.display = 'none';
        }
        else {
            topbar.style.height = `${topbarHeight}px`;
            logoSm.style.display = 'none';
            logo.style.display = 'block';
        }

        progress = false;
    }, 200);
});
