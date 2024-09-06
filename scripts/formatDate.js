function formatDate(dateInMs) {
    const dateObj = new Date(dateInMs);
    const day = dateObj.getDate();
    const month = dateObj.toLocaleString('default', { month: 'long' });
    const weekday = dateObj.toLocaleString('default', { weekday: 'long' });
    
    let daySuffix;
    switch (day) {
      case 1:
      case 21:
      case 31:
        daySuffix = 'st';
        break;
      case 2:
      case 22:
        daySuffix = 'nd';
        break;
      case 3:
      case 23:
        daySuffix = 'rd';
        break;
      default:
        daySuffix = 'th';
    }
    
    return `${day}${daySuffix} of ${month} (${weekday})`;
  }