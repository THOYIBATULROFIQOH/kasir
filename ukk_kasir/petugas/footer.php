<div class="card mt-2 mb-5">
	<div class="card">
		<div class="card-body text-center">
			&copy; 2024 Aplikasi UKK Kasir
		</div>
	</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
			$("#bayar").click(function() {
				let sisa = $('[name="bayar"]').val() - $('[name="TotalHarga"]').val();
				// $('[name="kembalian"]').val($('[name="bayar"]').val() - $('[name="TotalHarga"]').val());
				$('[name="kembalian"]').attr("value",sisa);
			});
			function pageprint() { 
				var divContents = document.getElementById("page-cetak").innerHTML; 
				var a = window.open('', '', 'height=500, width=500'); 
				a.document.write('<html>'); 
				a.document.write('<head><style>.noPrint{display:none}.noprket{background:#fff;decoration:none}</style></head>'); 				
				a.document.write('<body > <h1>Struk Pembelian <br>'); 
				a.document.write(divContents); 
				a.document.write('</body></html>'); 
				a.document.close(); 
				a.print(); 
			} 
			$("#print").click(function() {
				pageprint();
			});
</script>
</body>
</html>