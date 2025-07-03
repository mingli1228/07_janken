$(function () {
  const hands = ["guu", "choki", "paa"];
  const emojis = { guu: "✊", choki: "✌️", paa: "✋" };

  function getRandomHand() {
    return hands[Math.floor(Math.random() * hands.length)];
  }

  function displayStats(data) {
    const html = `
      グー：${data.guu}%<br>
      チョキ：${data.choki}%<br>
      パー：${data.paa}%
    `;
    $("#statsBox").html(html);
  }

  function displayCount(count) {
    $("#totalCount").text("今までの回数：" + count + " 回");
  }

  function fetchStats() {
    $.getJSON("get-stats.php", function (data) {
      displayStats(data);
    });
  }

  function fetchCount() {
    $.getJSON("get-count.php", function (data) {
      displayCount(data.count);
    });
  }

  $("#playBtn").on("click", function () {
    const hand = getRandomHand();
    $("#cpuHand").text("CPUの手: " + emojis[hand]);

    $.post("insert.php", { hand: hand }, function () {
      fetchStats();
      fetchCount();
    });
  });

  fetchStats();
  fetchCount();
});
