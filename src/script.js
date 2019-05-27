
const canvas = document.getElementById('sidebar');
const container = canvas.parentElement;
const context = canvas.getContext('2d');

const bounds = updateCanvasSize(container, canvas)
drawMarks(context, bounds);

// TODO
// Make into proper render loop
// - Marks rotate to follow cursor
// - Marks hide on mouse over & re-appear after some time?

function drawMarks(c, cBounds) {
    c.lineCap = 'round';
    c.lineJoin = 'round';
    c.lineWidth = 3;

    const size = 8;
    const padding = 20;

    const minX = 0 + padding;
    const minY = 0 + padding;
    const maxX = cBounds.width - padding - size;
    const maxY = cBounds.height - padding - size;

    const colors = ['#dc4343', '#62dca3', '#cfd053', '#2a92fb', '#e87bb8'];
    let lastColIndex = 0;
    let colLen = colors.length;
    let curX = minX;
    let curY = minY;

    while (curY <= maxY) {
        curX = minX;
        while (curX <= maxX) {
            // Color
            let colIndex;
            do {
                colIndex  = Math.floor(Math.random() * colLen);
            } while (colIndex === lastColIndex);
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
    c.beginPath();
    c.moveTo(xPos, yPos);
    c.lineTo(maxX, maxY);
    c.moveTo(xPos, maxY);
    c.lineTo(maxX, yPos);
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