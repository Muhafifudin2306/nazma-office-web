// Loader
const myTimeout = setTimeout(loader, 5000);

function loader() {
    requestAnimationFrame(() => {
        document.getElementById('loader').className = "cover-loader w-100 vh-100 bg-light d-flex justify-content-center align-items-center d-none";
        document.getElementById('body').className = "bg-light";
        myStopFunction();
    });
}

function myStopFunction() {
    clearTimeout(myTimeout);
}