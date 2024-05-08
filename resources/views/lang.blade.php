<script>
  const lang = localStorage.getItem('lang')
  if (!lang) {
    location.href = '/es'
  } else {
    location.href = `/${lang}`
  }
</script>
