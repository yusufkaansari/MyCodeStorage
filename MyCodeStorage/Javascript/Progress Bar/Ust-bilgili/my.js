// This code is just for initializing the random fulfillment of the progress bars
HTMLElement.prototype.setVariable = function(variableName, newValue) {
    this.style.setProperty(`--${variableName}`, newValue);
};

const getRandomPercentage = () => Math.floor(Math.random() * 99) + 1;

const progressBarFills = document.querySelectorAll('.bar-container .progress-bar .fill');
progressBarFills.forEach(fill => {
    const currentPercentage = getRandomPercentage();
    fill.setVariable('fill', `${currentPercentage}%`);
    fill.setAttribute('data-fill', currentPercentage);
});
