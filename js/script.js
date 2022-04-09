function getSiblings(element) {
  const siblings = []
  // if no parent, return no sibling
  
  if (!element.parentNode) {
    return siblings
  }
  // first child of the parent node
  
  let sibling = element.parentNode.firstChild
  // collecting siblings
  
  while (sibling) {
    if (sibling.nodeType === 1 && sibling !== element) {
      siblings.push(sibling)
    }
    sibling = sibling.nextSibling
  }
  return siblings
}

function getAllQueryParams() {
  var paramsArray = [],
    hash;
  var hashes = window.location.href
    .slice(window.location.href.indexOf("?") + 1)
    .split("&");
  for (var i = 0; i < hashes.length; i++) {
    hash = hashes[i].split("=");
    paramsArray.push(hash[0]);
    paramsArray[hash[0]] = hash[1];
  }
  
  const paramsObj = paramsArray.reduce((acc, val) => {
    if (acc) {
      return [
        ...acc,
        {
          name: decodeURIComponent(val),
          value: decodeURIComponent(paramsArray[val])
        },
      ];
    }
    
    return [
      {
        name: decodeURIComponent(val),
        value: decodeURIComponent(paramsArray[val])
      },
    ];
  }, []);
  
  return paramsObj;
}

function handlePageLoad(queryParams, iso) {
  if (queryParams.length === 0)
    return
  
  document
    .querySelectorAll('.filter-button-group button')
    .forEach((gridItem) => {
      gridItem.classList.remove('active')
    })
  
  queryParams.forEach((param) => {
    const {name, value} = param
    
    const matchingItem = document.querySelector(`[data-url="${name}=${value}"]`)
    matchingItem.classList.add("active")
  })
  
  const filter = Array.from(
    document.querySelectorAll('.filter-button-group button.active')
  ).reduce(
    (acc, selectedElement) => acc + selectedElement.dataset.filter,
    ''
  )
  
  iso.arrange({filter})
}

function handleFilterButtonClick(target, iso) {
  const filterValue = target.dataset.filter
  
  if (filterValue === '*') {
    iso.arrange({filter: filterValue})
    
    document
      .querySelectorAll('.filter-button-group button')
      .forEach((gridItem) => {
        gridItem.classList.remove('active')
      })
    
    target.classList.add('active')
    
    history.pushState({}, "", `${window.location.href.replace(window.location.search, "")}`)
  } else {
    target.classList.add('active')
    
    const url = window.location.href;
    
    const attribute = target.dataset.url.split("=")
    const attributeName = attribute[0]
    const attributeValue = attribute[1]
    
    document
      .querySelector('.filter-button-group button[data-filter="*"]')
      .classList.remove('active')
    
    getSiblings(target).forEach((sibling) => {
      sibling.classList.remove('active')
    })
    
    const filter = Array.from(
      document.querySelectorAll('.filter-button-group button.active')
    ).reduce(
      (acc, selectedElement) => acc + selectedElement.dataset.filter,
      ''
    )
    iso.arrange({filter})
    
    const queryParams = getAllQueryParams().filter(param => param.value !== "undefined");
    const filterWitchMatchingName = queryParams.find(param => param.name === attributeName);
    
    if (filterWitchMatchingName) {
      const regex = new RegExp(`${attributeName}=([^&]*)`);
      history.pushState({}, "", `${url.replace(regex, `${attributeName}=${attributeValue}`)}`)
    } else {
      if (queryParams.length >= 1) {
        history.pushState({}, "", `${url}&${attributeName}=${attributeValue}`)
      } else {
        history.pushState({}, "", `${url}?${attributeName}=${attributeValue}`)
      }
    }
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const grid = document.querySelector('.grid')
  
  const iso = new Isotope(grid, {
    itemSelector: '.grid-item',
  })
  
  const queryParams = getAllQueryParams().filter(param => param.value !== "undefined")
  handlePageLoad(queryParams, iso);
  
  const gridItems = document.querySelectorAll('.filter-button-group button')
  gridItems.forEach((item) => {
    item.addEventListener('click', ({target}) => {
      handleFilterButtonClick(target, iso)
    })
  })
})

function handleFormSubmit(event) {
  event.preventDefault();
  
  const category = document.getElementById("categoria").value;
  const condition = document.getElementById("condicao").value;
  const type = document.getElementById("tipo").value;
  
  let url = "?";
  
  if (category !== "0") {
    url += category
  }
  
  if (condition !== "0") {
    if (url === "?") {
      url += condition
    } else {
      url += `&${condition}`
    }
  }
  
  if (type !== "0") {
    if (url === "?") {
      url += type
    } else {
      url += `&${type}`
    }
  }
  
  if (url !== "?")
    window.location.href = `/anuncios/${url}`
}

document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("#home-search");
  if (form)
    form.addEventListener("submit", handleFormSubmit)
})

// Code from W3Schools
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /* When an item is clicked, update the original select box,
      and the selected item: */
      var y, i, k, s, h, sl, yl;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      sl = s.length;
      h = this.parentNode.previousSibling;
      for (i = 0; i < sl; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");
          yl = y.length;
          for (k = 0; k < yl; k++) {
            y[k].removeAttribute("class");
          }
          this.setAttribute("class", "same-as-selected");
          break;
        }
      }
      h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
const clickEvents = ['click', 'touchstart']
const mobileButton = document.querySelector('.header__mobileButton')

function toggleMenu(event) {
  event.preventDefault()
  
  const header = document.querySelector('.header')
  header.classList.toggle('active')
  const isActive = header.classList.contains('active')
  if (isActive) {
    document.body.style = 'overflow: hidden;'
  } else {
    document.body.style = 'overflow: auto;'
  }
}

clickEvents.forEach((userEvent) => {
  mobileButton.addEventListener(userEvent, toggleMenu)
})
