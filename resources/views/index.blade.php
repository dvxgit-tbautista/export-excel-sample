<button type="submit" class="btn btn-info" onclick="exportExcel()">Export</button>

<script>
    function exportExcel() {
        console.log("exporting!");
        token = "{{ csrf_token() }}";
        window.open("{{ route('export') }}", "_blank");
    }
</script>
