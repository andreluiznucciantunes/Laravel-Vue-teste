import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/produto',
      name: 'ProdutoIndex',
      component: () => import('../views/Produto/ProdutoIndex.vue'),
    },
    {
      path: '/produto/create',
      name: 'ProdutoCreate',
      component: () => import('../views/Produto/ProdutoCreate.vue'),
    },
    {
      path: '/produto/:id/edit',
      name: 'ProdutoEdit',
      component: () => import('../views/Produto/ProdutoEdit.vue'),
      props: true,
    }
  ]
})

export default router
