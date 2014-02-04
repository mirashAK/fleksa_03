<div id="container" class="grid">
    <h4 class="center">Welcome to Fleksa v.03 !</h4>
    
    <div id="body" class="grid">
        <div class="col_4 column"></div>
        <div class="center col_4 column list_holder">
        
            <section id="todoapp"></section>
                
        </div>
        <div class="col_4 column"></div>
    </div>
</div>

<script type="text/mustache" id="app-template">
          <todo-app>
                  <header id="header">
                          <h1>todos</h1>
                          <input id="new-todo" placeholder="What needs to be done?" autofocus="" can-enter="createTodo">
                  </header>
                  <section id="main" class="{{^if todos.length}}hidden{{/if}}">
                          <input id="toggle-all" type="checkbox" {{#if todos.allComplete}}checked="checked"{{/if}} can-click="toggleAll">
                          <label for="toggle-all">Mark all as complete</label>
                          <ul id="todo-list">
                                  {{#each displayList}}
                                  <li class="todo{{#if complete}} completed{{/if}}{{#if editing}} editing{{/if}}">
                                          <div class="view">
                                                  <input class="toggle" type="checkbox" can-value="complete">
                                                  <label can-dblclick="edit">{{text}}</label>
                                                  <button class="destroy" can-click="destroy"></button>
                                          </div>
                                          <input class="edit" type="text" value="{{text}}" can-blur="updateTodo"
                                                  can-keyup="cancelEditing" can-enter="updateTodo">
                                  </li>
                                  {{/each}}
                          </ul>
                  </section>
                  <footer id="footer" class="{{^if todos.length}}hidden{{/if}}">
                          <span id="todo-count">
                                  <strong>{{todos.remaining}}</strong> {{plural "item" todos.remaining}} left
                          </span>
                          <ul id="filters">
                                  <li>{{{link "All" undefined}}}</li>
                                  <li>{{{link "Active" "active"}}}</li>
                                  <li>{{{link "Completed" "completed"}}}</li>
                          </ul>
                          <button id="clear-completed" class="{{^if todos.completed.length}}hidden{{/if}}" can-click="clearCompleted">
                                  Clear completed ({{todos.completed.length}})
                          </button>
                  </footer>
          </todo-app>
  </script>

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div>
    <p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>