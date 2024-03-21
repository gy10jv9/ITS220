const chartContainer = document.querySelector('.chart-container');
const data = [30, 80, 55, 90, 40];

data.forEach(value => {
  const bar = document.createElement('div');
  bar.classList.add('bar');
  bar.style.height = `${value}px`;
  chartContainer.appendChild(bar);
});