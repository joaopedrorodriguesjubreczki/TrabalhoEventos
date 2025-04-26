$googleCalendarLink = "https://www.google.com/calendar/render?action=TEMPLATE&text=" . urlencode($evento['nome']) .
    "&dates=" . date("Ymd", strtotime($evento['data'])) . "/" . date("Ymd", strtotime($evento['data'])) .
    "&details=" . urlencode($evento['descricao']) .
    "&location=" . urlencode($evento['local']);

echo "<a href='$googleCalendarLink' target='_blank'>Adicionar ao Google Calendar</a>";