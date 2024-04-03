const sider = document.querySelector('ul.app-sidebar')
const products = document.querySelector('.products')
const heading = document.querySelector('.app-heading')
heading.addEventListener
let currentTab = ''

const menus = {
  Laptop1: ['Sony1', 'Acer', 'Asus', 'Dell'],
  Smartphone: ['Iphone', 'Galaxy S', 'Sony Xperia'],
  Tablet: ['Galaxy Tab', 'Ipad', 'Xperia Tab'],
}
const categories = Object.keys(menus)

const setTab = (newTab) => {
  currentTab = newTab
  heading.textContent = newTab
  render()
}

const renderSider = () => {
  let result = ''

  categories.forEach((key) => {
    const isActive = currentTab === key

     result += `<li class="tab nav-item nav-link cursor-pointer ${isActive ? 'text-mute bg-primary' : ''}" onclick="setTab('${key}')">${key}</li>`
  

  })

  sider.innerHTML = result
}

const renderList = () => {
  let result = ''
  const items = menus[currentTab] || []

  if (items.length > 0) {
    items.forEach((item) => {
      result += `<div class="col-lg-4">
      <div class="mb-4">
        <div class="">
          <p class="text-primary">${item}</p>
        </div>
      </div>
    </div>`
    })
  }

  products.innerHTML = result
}

function render() {
  renderSider()
  renderList()
}

render()