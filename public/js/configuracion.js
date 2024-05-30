(function () {
	const table = new DataTable('#data-table', {
		language: {
			url: `${_url_}/js/datatable-languaje-ES.json`,
		},
	});
	table.on('draw.dt', function () {
		let elemento1 = document.querySelector('table#data-table').parentElement;
		elemento1.classList.add("table-responsive", "p-0", "mb-3");
	});
})();