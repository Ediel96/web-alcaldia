$( document ).ready(function() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const idCount = urlParams.get('idCount')
    console.log(idCount)
});