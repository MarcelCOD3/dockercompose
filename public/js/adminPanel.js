const searchInput = document.getElementById("searchUser");
const tableBody = document.querySelector("table tbody");

searchInput.addEventListener("input", function () {
  const filter = this.value.toLowerCase();

  Array.from(tableBody.rows).forEach((row) => {
    const nickname = row.cells[0].textContent.toLowerCase();
    const email = row.cells[3].textContent.toLowerCase();

    if (nickname.includes(filter) || email.includes(filter)) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });
});
