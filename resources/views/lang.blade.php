<script>
  const lang = localStorage.getItem('lang')
  if (!lang) {
    location.href = '/en'
  } else {
    location.href = `/${lang}`
  }
</script>
