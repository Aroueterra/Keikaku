const hours = new Date().getHours();
const isDayTime = hours > 6 && hours < 20;

const dayTerm =
  hours > 17 ? "Konbanwa!" : hours > 12 ? "Konnichiwa!" : "Ohayou!";
tippy("#mascot", {
  content: dayTerm,
  theme: "tomato",
  arrow: true,
  size: "large",
  placement: "right-start"
});
tippy("#info-com", {
  content: "Total Comment Count",
  theme: "tomato",
  arrow: true,
  size: "large",
  placement: "right-start"
});
tippy("#info-views", {
  content: "Views",
  theme: "tomato",
  arrow: true,
  size: "large",
  placement: "right-start"
});
tippy("#info-down", {
  content: "Downvotes",
  theme: "tomato",
  arrow: true,
  size: "large",
  placement: "right-start"
});
tippy("#info-up", {
  content: "Upvotes",
  theme: "tomato",
  arrow: true,
  size: "large",
  placement: "right-start"
});
tippy("#info-titles", {
  content: "Title Count",
  theme: "tomato",
  arrow: true,
  size: "large",
  placement: "right-start"
});
tippy("#info-duration", {
  content: "Cumulative Duration",
  theme: "tomato",
  arrow: true,
  size: "large",
  placement: "right-start"
});
// if (isDayTime) {
//   tippy("#mascot", {
//     content: "Ohayou",
//     theme: "tomato",
//     arrow: true,
//     placement: "right-start"
//   });
// } else {
//   tippy("#mascot", {
//     content: "Konbanwa",
//     theme: "tomato",
//     arrow: true,
//     placement: "right-start"
//   });
// }
