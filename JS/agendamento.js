let currentStep = 1;

function updateSteps() {

    document.querySelectorAll(".step").forEach((step, index) => {
        step.classList.toggle("active", index + 1 === currentStep);
    });

    document.querySelectorAll(".step-content").forEach((content, index) => {
        content.classList.toggle("active", index + 1 === currentStep);
    });
}

function nextStep() {
    if (currentStep < 3) {
        currentStep++;
        updateSteps();
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        updateSteps();
    }
}