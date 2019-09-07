$(document).ready(function() {
    //Application state
    const state = {
        clickForMove: false
    };

    $(".foldsRoom").click(function() {
        let foldClass = $(this)
            .children()
            .attr("class");

        let foldRow = $(this).attr("row");
        let foldCol = $(this).attr("col");
        let img = "";

        console.log(foldClass, foldRow, foldCol);

        // Toggling class based on click
        for (let row = 1; row < 9; row++) {
            for (let col = 1; col < 9; col++) {
                if ($(`[row=${row}][col=${col}]`).hasClass("clicked")) {
                    $(`[row=${row}][col=${col}]`).removeClass("clicked");
                }
            }
        }

        if (foldClass !== undefined && foldClass.startsWith("fold ")) {
            $(`[row=${foldRow}][col=${foldCol}]`).addClass("clicked");

            // Indicator for movement based on fold's type
            if (foldClass !== undefined && foldClass.startsWith("fold pawn white")) {
                $(".indicator").remove();
                $(`[row=${foldRow - 1}][col=${foldCol}]`).html('<div class="indicator"></div>');
                $(`[row=${foldRow - 2}][col=${foldCol}]`).html('<div class="indicator"></div>');

                img = $(this)
                    .children()
                    .children()
                    .attr("src");
                console.log(img);
            }
        }

        if (foldClass === undefined) {
            $(".indicator").remove();
        }

        if (foldClass === "indicator") {
            // $(this).html("<p>taen</p>");
        }
    });
});
