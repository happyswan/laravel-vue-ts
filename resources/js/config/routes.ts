import FishIndex from "../pages/Fish/FishIndex.vue";
import FishForm from "../pages/Fish/FishForm.vue";

export default [
    {
        path: "/",
        name: "Index",
        component: FishIndex
    },
    {
        path: "/create",
        name: "Create Form",
        component: FishForm
    },
    {
        path: "/edit/:id",
        name: "Edit Form",
        component: FishForm
    },
];
