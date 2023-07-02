// AJAX: upvote, downvote
function projectVotes(user_id, project_id, stat, obj) {
  const clickedSum = obj.closest(".card").querySelector(".sum");
  const xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    `index.php?action=getProjectVotes&user_id=${user_id}&project_id=${project_id}&stat=${stat}`
  );

  xhr.addEventListener("load", () => {
    clickedSum.innerHTML = xhr.responseText;
    console.log(obj);
  });
  xhr.send();
}
