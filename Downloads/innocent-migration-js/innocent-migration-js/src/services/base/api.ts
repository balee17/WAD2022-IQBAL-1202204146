import axios from 'axios';

export const HTTPClient = axios.create({
  baseURL: process.env.NEXT_PUBLIC_BASE_URL,
  headers: {
    Accept: 'application/json'
  }
});
