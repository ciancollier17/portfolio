document.querySelectorAll('.coloured').forEach(coloured => {
  coloured.addEventListener('click', () => {
    document.querySelectorAll('.project-title').forEach(project => {
      if (project.className.indexOf('active-links') >= 0) {
        const classes = project.className.split(' ');
        classes.splice(classes.indexOf('active-links'), 1);
        project.className = classes.join(' ');
      }
    });
  });
});

document.querySelectorAll('.project-title').forEach(clicked_project => clicked_project.addEventListener('click', (e) => {
  e.stopPropagation();

  document.querySelectorAll('.project-title').forEach(project => {
    if (project.className.indexOf('active-links') >= 0) {
      // .active-links is assigned to theis project

      if (project.id != clicked_project.id) {
        // Remove .active-links if this is not the clicked project
        const classes = project.className.split(' ');
        classes.splice(classes.indexOf('active-links'), 1);
        project.className = classes.join(' ');
      }
    } else {
      // If not already assigned .active-links

      if (project.id == clicked_project.id) {
        project.className += " active-links";
      }
    }
  });
}));
