
const canvas = document.getElementById('sidebar');
const container = canvas.parentElement;
const context = canvas.getContext('2d');

let bounds = updateCanvasSize(container, canvas)
drawMarks(context, bounds);

window.addEventListener('resize', event => {
     bounds = updateCanvasSize(container, canvas);
     drawMarks(context, bounds);
}, {passive: true});

function drawTick() {
    window.requestAnimationFrame(function() {
        drawMarks(context, bounds);
        window.setTimeout(drawTick, 900 + (Math.random() * 1200));
    });
}
window.setTimeout(drawTick, 1000);

function drawMarks(c, cBounds) {
    c.clearRect(0, 0, cBounds.width, cBounds.height);
    c.lineCap = 'round';
    c.lineJoin = 'round';
    c.lineWidth = 3;

    const size = 8;
    const padding = 5;
    const bleed = 5;

    const minX = 0 + padding - bleed;
    const minY = 0 + padding - bleed;
    const maxX = (cBounds.width - padding) + bleed;
    const maxY = (cBounds.height - padding) + bleed;

    const colors = ['#dc4343', '#62dca3', '#cfd053', '#2a92fb', '#e87bb8'];
    let lastColIndex = 0;
    let colLen = colors.length;
    let curX = minX;
    let curY = minY;

    while (curY <= maxY) {
        curX = minX;
        while (curX <= maxX) {
            // Color
            let colIndex = Math.floor(Math.random() * colLen);
            const color = colors[colIndex];
            lastColIndex = colIndex;
            // Draw
            drawMark(c, curX, curY, size, color);
            // Update position
            curX += (size + padding);
        }
        curY += (size + padding);
    }
}

function drawMark(c, xPos, yPos, size, color) {
    const maxY = yPos + size;
    const maxX = xPos + size;

    c.strokeStyle = color;
    // c.fillStyle = color;
    // c.fillRect(xPos, yPos, size, size);
    c.beginPath();
    if (Math.random() < 0.5) {
        c.moveTo(xPos, yPos);
        c.lineTo(maxX, maxY);
        c.moveTo(xPos, maxY);
        c.lineTo(maxX, yPos);    
    } else {
        const radius = size / 2;
        c.arc(xPos + radius, yPos + radius, radius, Math.PI * 2, false);
    }
    c.stroke();
}

/**
 * Update the size of the canvas by setting it to fill the
 * container element.
 */
function updateCanvasSize(container, canvas) {
    const containerBounds = container.getBoundingClientRect();
    canvas.width = containerBounds.width;
    canvas.height = containerBounds.height;
    canvas.style.width = containerBounds.width + 'px';
    canvas.style.height = containerBounds.height + 'px';
    return canvas.getBoundingClientRect();
}