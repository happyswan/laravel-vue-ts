import {TObject} from "../types/TObject";
import axios from "axios";
import {TParam} from "../types/TParam";

export default class ServerService {

    /**
     * @param url
     * @param params
     * @param headers
     */
    static async get(url: string, params: TParam = {}, headers: TObject = {}) {
        //@ts-ignore
        const searchParams = new URLSearchParams(params);

        return (await axios.get(
            `${url}?${searchParams}`,
            headers
        ));
    }

    /**
     * @param url
     * @param params
     * @param headers
     */
    static async put(url: string, params: TParam = {}, headers: TObject = {}) {
        return (await axios.put(
            url,
            params,
            headers
        ));
    }

    /**
     * @param url
     * @param params
     * @param headers
     */
    static async post(url: string, params: TParam = {}, headers: TObject = {}) {
        return (await axios.put(
            url,
            params,
            headers
        ));
    }

    /**
     * @param url
     * @param params
     * @param headers
     */
    static async patch(url: string, params: TParam = {}, headers: TObject = {}) {
        return (await axios.put(
            url,
            params,
            headers
        ));
    }

    /**
     * @param url
     * @param params
     * @param headers
     */
    static async delete(url: string, params: TParam = {}, headers: TObject = {}) {
        //@ts-ignore
        const searchParams = new URLSearchParams(params.toString());

        return (await axios.delete(
            `${url}?${searchParams}`,
            headers
        ));
    }

}
