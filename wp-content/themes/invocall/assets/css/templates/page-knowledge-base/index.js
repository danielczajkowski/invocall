const tabs = document.querySelectorAll("[tab-name]");
const tabContents = document.querySelectorAll("[tab-content]");
if (tabs.length > 0) {
  tabs[0].classList.add("active");
  tabContents[0].classList.add("active");
  tabs.forEach(function (tab, i) {
    tab.addEventListener("click", function () {
      tabs.forEach(function (tab__item) {
        return tab__item.classList.remove("active");
      });
      tabContents.forEach(function (tabContent) {
        return tabContent.classList.remove("active");
      });
      tab.classList.add("active");
      tabContents[i].classList.add("active");
    });
  });
}