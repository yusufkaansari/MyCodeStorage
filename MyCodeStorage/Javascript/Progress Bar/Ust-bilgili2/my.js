$(".counter").each(function() {
	var $this = $(this),
		countTo = $this.attr("data-count");

	$({ countNum: $this.text() }).animate(
		{
			countNum: countTo
		},
		{
			duration: 2000,
			easing: "linear",
			step: function() {
				$this.text("Adding sauce.. " + Math.floor(this.countNum) + "%");
			},
			complete: function() {
				$this.text("Adding sauce.. " + this.countNum + "%");
			}
		}
	);
});
