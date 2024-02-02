import ServerService from "./ServerService";
import FishEndpointConfig from "../config/endpoints/FishEndpointConfig";

export default class FishService {

    /**
     * @param page
     * @param limit
     */
    static async list(page: number, limit: number) {
        return (await ServerService.get(
            FishEndpointConfig.list,
            {
                page: page,
                limit: limit
            }
        ));
    }

    /**
     * @param name
     */
    static async store(name: string) {
        return (await ServerService.put(
            FishEndpointConfig.store,
            {
                name: name
            }
        ));
    }

    /**
     * @param id
     * @param name
     */
    static async update(id: number, name: string) {
        return (await ServerService.patch(
            FishEndpointConfig.update,
            {
                id: id,
                name: name
            }
        ));
    }

    /**
     * @param id
     */
    static async destroy(id: number) {
        return (await ServerService.delete(
            FishEndpointConfig.destroy,
            {
                id: id
            }
        ));
    }

}
