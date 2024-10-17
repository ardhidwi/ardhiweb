// Get elements
const addButton = document.getElementById('add-button');
const todoInput = document.getElementById('todo-input');
const todoList = document.getElementById('todo-list');

// Function to add a new task
function addTask() {
    const taskText = todoInput.value.trim();
    if (taskText === '') return;

    // Create task item
    const todoItem = document.createElement('li');
    todoItem.classList.add('todo-item');

    const todoText = document.createElement('span');
    todoText.classList.add('todo-text');
    todoText.textContent = taskText;

    // Create delete button
    const deleteButton = document.createElement('button');
    deleteButton.classList.add('delete-button');
    deleteButton.textContent = 'Delete';

    // Append elements
    todoItem.appendChild(todoText);
    todoItem.appendChild(deleteButton);
    todoList.appendChild(todoItem);

    // Clear input field
    todoInput.value = '';

    // Add delete functionality
    deleteButton.addEventListener('click', function() {
        todoList.removeChild(todoItem);
    });

    // Add edit functionality
    todoText.addEventListener('click', function() {
        // Create an input field for editing
        const editInput = document.createElement('input');
        editInput.type = 'text';
        editInput.classList.add('edit-input');
        editInput.value = todoText.textContent;

        // Replace the text with the input field
        todoItem.replaceChild(editInput, todoText);

        // Focus on the input field and select the text
        editInput.focus();
        editInput.select();

        // When user presses Enter, save the updated task
        editInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                todoText.textContent = editInput.value.trim();
                todoItem.replaceChild(todoText, editInput);
            }
        });

        // When input loses focus, save the updated task
        editInput.addEventListener('blur', function() {
            todoText.textContent = editInput.value.trim();
            todoItem.replaceChild(todoText, editInput);
        });
    });
}

// Event listener for add button
addButton.addEventListener('click', addTask);

// Event listener for Enter key in input
todoInput.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') addTask();
});
