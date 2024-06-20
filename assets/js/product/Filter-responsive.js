const formFilter = document.getElementById("formFilter");
const filterReponsive = document.getElementById("filter_responsive");

filterReponsive.addEventListener("click", () => {
    formFilter.classList.toggle("active_filter");
});