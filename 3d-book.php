
    <script src="<?php echo PDFEV_PRO_Const_URL; ?>js/jquery.min.js"></script>
    <script src="<?php echo PDFEV_PRO_Const_URL; ?>js/default-book-view.js"></script>
    <script src="<?php echo PDFEV_PRO_Const_URL; ?>js/html2canvas.min.js"></script>
    <script src="<?php echo PDFEV_PRO_Const_URL; ?>js/pdf.min.js"></script>
    <script src="<?php echo PDFEV_PRO_Const_URL; ?>js/pdf.worker.js"></script>
    <script src="<?php echo PDFEV_PRO_Const_URL; ?>js/three.min.js"></script>
    <script src="<?php echo PDFEV_PRO_Const_URL; ?>dist/flip-book.js"></script>

    <div class="flip-book-container" style="height: 900px;width: 900px;margin: auto;"></div>
    <script>
        options = {
            pdf: 'pdf.pdf',
            pages: 5,
        }
        var book = $('.flip-book-container').FlipBook(options);
    </script>
